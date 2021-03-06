@extends('laralum::layouts.master')
@section('icon', 'ion-edit')
@section('title', __('laralum_shop::categories.edit_title', ['id' => $category->id]))
@section('subtitle', __('laralum_shop::categories.edit_subtitle', ['id' => $category->id]))
@section('breadcrumb')
    <ul class="uk-breadcrumb">
        <li><a href="{{ route('laralum::index') }}">@lang('laralum_shop::general.home')</a></li>
        <li><a href="{{ route('laralum::shop.category.index') }}">@lang('laralum_shop::categories.title')</a></li>
        <li><span href="">@lang('laralum_shop::categories.edit_title', ['id' => $category->id])</span></li>
    </ul>
@endsection
@section('content')
    <div class="uk-container uk-container-large">
        <div uk-grid>
            <div class="uk-width-1-1@s uk-width-1-3@l"></div>
            <div class="uk-width-1-1@s uk-width-1-3@l">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-body">
                        <form action="{{ route('laralum::shop.category.update', ['category' => $category->id]) }}" class="uk-form-stacked" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="uk-margin">
                                <div uk-grid class="uk-grid-small">
                                    <div class="uk-width-1-1">
                                        <label class="uk-form-label">@lang('laralum_shop::categories.name')</label>
                                        <div class="uk-form-controls">
                                            <input required value="{{ old('name', $category->name) }}" name="name" class="uk-input" type="text" placeholder="@lang('laralum_shop::categories.name_ph')">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <button type="submit" class="uk-button uk-button-primary">
                                            <span class="ion-forward"></span>&nbsp; @lang('laralum_shop::categories.save_category')
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1@s uk-width-1-3@l"></div>
        </div>
    </div>
@endsection
