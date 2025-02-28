<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author Admin
 */
class Libraries {

    public static function Cutstring($chuoi, $gioihan) {
        if (strlen($chuoi) <= $gioihan) {
            return $chuoi;
        } else {
            if (strpos($chuoi, " ", $gioihan) > $gioihan) {
                $new_gioihan = strpos($chuoi, " ", $gioihan);
                $new_chuoi = substr($chuoi, 0, $new_gioihan) . "...";
                return $new_chuoi;
            }
            $new_chuoi = substr($chuoi, 0, $gioihan) . "...";
            return $new_chuoi;
        }
    }
    public static function check($s){
        echo "<pre>";
        print_r($s);
        echo "</pre>";
    }
    public static function get_vip($id){
        $user = Member::model()->findByPk($id);
        if(!is_array($user))
            return 0;
        return ($user->premium=='') ? 0 : $user->premium;
    }
    public static function filterContent($content){
        echo $content;   
    }
    public static function isEnable($id){
        return count((Content::model()->findAll("category_id = ".$id." and state = 1")));
    }
    public static function getCmt($id){
        $item = Comment::model()->findAllByAttributes(array('content_id' => $id));
        return count($item);
    }
    public static function getImage($post) {
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post, $matches);
        if($matches[1]){
            $first_img = $matches[1][0];
        }
        if (empty($first_img)) {
            $first_img = Yii::app()->getBaseUrl(true)."/themes/default/assets/img/no-thumbnail.png";
        }
        return $first_img;
    }
}

?>
