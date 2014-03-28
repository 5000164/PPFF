<?php

class ValidateModel
{
    public static function validate_value(&$value, $post)
    {
        foreach ($value->config['value'] as $name) {
            $value->data[$name] = '';
            switch (true) {
                case $name === 'familyname':
                    $value->data['familyname'] = UtilModel::escape($post->data['familyname']);
                    break;
                case $name === 'firstname':
                    $value->data['firstname'] = UtilModel::escape($post->data['firstname']);
                    break;
                case $name === 'gender1':
                    if ($post->data['gender'] === '1') {
                        $value->data['gender1'] = 'checked';
                    }
                    break;
                case $name === 'gender2':
                    if ($post->data['gender'] === '2') {
                        $value->data['gender2'] = 'checked';
                    }
                    break;
                case $name === 'location1':
                    if ($post->data['location'] === '1') {
                        $value->data['location1'] = 'selected';
                    }
                    break;
                case $name === 'location2':
                    if ($post->data['location'] === '2') {
                        $value->data['location2'] = 'selected';
                    }
                    break;
                case $name === 'location3':
                    if ($post->data['location'] === '3') {
                        $value->data['location3'] = 'selected';
                    }
                    break;
                case $name === 'mood1':
                    if ($post->data['mood1'] === '1') {
                        $value->data['mood1'] = 'checked';
                    }
                    break;
                case $name === 'mood2':
                    if ($post->data['mood2'] === '1') {
                        $value->data['mood2'] = 'checked';
                    }
                    break;
                case $name === 'mood3':
                    if ($post->data['mood3'] === '1') {
                        $value->data['mood3'] = 'checked';
                    }
                    break;
                case $name === 'request':
                    $value->data['request'] = UtilModel::escape($post->data['request']);
                    break;
            }
        }
    }

    public static function validate_display(&$display, $post)
    {
        foreach ($display->config['display'] as $name) {
            $display->data[$name] = '';
            switch (true) {
                case $name === 'familyname':
                    $display->data['familyname'] = UtilModel::escape($post->data['familyname']);
                    break;
                case $name === 'firstname':
                    $display->data['firstname'] = UtilModel::escape($post->data['firstname']);
                    break;
                case $name === 'gender':
                    if ($post->data['gender'] === '1') {
                        $display->data['gender'] = '男性';
                    } else if ($post->data['gender'] === '2') {
                        $display->data['gender'] = '女性';
                    }
                    break;
                case $name === 'location':
                    if ($post->data['location'] === '1') {
                        $display->data['location'] = '地球';
                    } else if ($post->data['location'] === '2') {
                        $display->data['location'] = '月';
                    } else if ($post->data['location'] === '3') {
                        $display->data['location'] = '太陽';
                    }
                    break;
                case $name === 'mood1':
                    if ($post->data['mood1'] === '1') {
                        $display->data['mood1'] = '眠い';
                    }
                    break;
                case $name === 'mood2':
                    if ($post->data['mood2'] === '1') {
                        $display->data['mood2'] = 'お腹空いた';
                    }
                    break;
                case $name === 'mood3':
                    if ($post->data['mood3'] === '1') {
                        $display->data['mood3'] = '疲れた';
                    }
                    break;
                case $name === 'request':
                    $display->data['request'] = UtilModel::escape($post->data['request']);
                    break;
            }
        }
    }

    public static function validate_error(&$error, $post)
    {
        $error_flag = false;

        foreach ($error->config['error'] as $name) {
            $error->data[$name] = '';
            switch (true) {
                case $name === 'name':
                    if ($post->data['familyname'] === '' || $post->data['firstname'] === '') {
                        $error->data['name'] = '名前を入力してください。';
                        $error_flag          = true;
                    }
                    break;
                case $name === 'gender':
                    if (!($post->data['gender'] === '1' || $post->data['gender'] === '2')) {
                        $error->data['gender'] = '性別を選択してください。';
                        $error_flag            = true;
                    }
                    break;
            }
        }

        return $error_flag;
    }

    public static function make_hidden_data($post)
    {
        $hidden_data = '';

        foreach ($post->config['post'] as $name) {
            if ($name !== 'page') {
                $value = UtilModel::escape($post->data[$name]);
                $hidden_data .= '<input type="hidden" name="'.$name.'" value="'.$value.'">';
            }
        }

        return $hidden_data;
    }
}
