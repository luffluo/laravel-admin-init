<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

Encore\Admin\Form::forget(['map', 'editor']);

Encore\Admin\Form::init(function (Encore\Admin\Form $form) {

    $form->footer(function ($footer) {

        // 去掉`重置`按钮
        $footer->disableReset();

        // 去掉`查看`checkbox
        $footer->disableViewCheck();

        // 去掉`继续编辑`checkbox
        $footer->disableEditingCheck();

        // 去掉`继续创建`checkbox
        $footer->disableCreatingCheck();
    });
});

// 覆盖`admin`命名空间下的视图
app('view')->prependNamespace('admin', resource_path('views/laravel-admin'));
