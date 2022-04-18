<?php


class Validation
{
    public static function validatePost($post)
    {
        foreach ($post as $key => $value) {
            $post[$key] = trim($post[$key]);
            if ($key == 'password') continue;
            $post[$key] = strip_tags($post[$key]);
            $post[$key] = htmlspecialchars($post[$key]);
            $post[$key] = stripslashes($post[$key]);
        }

        return $post;

    }
}