<?php

use Yajra\DataTables\ButtonsServiceProvider;
use Yajra\DataTables\DataTablesServiceProvider;
use Yajra\DataTables\EditorServiceProvider;
use Yajra\DataTables\ExportServiceProvider;
use Yajra\DataTables\FractalServiceProvider;
use Yajra\DataTables\HtmlServiceProvider;

test('it loads all the packages', function () {
    expect(class_exists(ButtonsServiceProvider::class))->toBeTrue();
    expect(class_exists(DataTablesServiceProvider::class))->toBeTrue();
    expect(class_exists(EditorServiceProvider::class))->toBeTrue();
    expect(class_exists(ExportServiceProvider::class))->toBeTrue();
    expect(class_exists(FractalServiceProvider::class))->toBeTrue();
    expect(class_exists(HtmlServiceProvider::class))->toBeTrue();
});
