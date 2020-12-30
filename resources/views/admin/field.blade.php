<div class="row">
    <div class="col-md-12">
        @input([
            'name' => 'seometa[title]',
            'label' => __('seo::meta.title')
        ])

        @slug([
            'name' => 'seourl[request_path]',
            'label' => __('seo::meta.url')
        ])

        @textarea([
            'name' => 'seometa[description]',
            'label' => __('seo::meta.description')
        ])

        @textarea([
            'name' => 'seometa[keywords]',
            'label' => __('seo::meta.keywords')
        ])
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-12">
        @input([
            'name' => 'seometa[og_title]',
            'label' => __('seo::meta.og_title')
        ])

        @textarea([
            'name' => 'seometa[og_description]',
            'label' => __('seo::meta.og_description')
        ])

        @mediafile([
            'name' => 'seometa[og_image]',
            'label' => __('seo::meta.og_image'),
        ])
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-12">
        @input([
            'name' => 'seometa[twitter_title]',
            'label' => __('seo::meta.twitter_title')
        ])

        @textarea([
            'name' => 'seometa[twitter_description]',
            'label' => __('seo::meta.twitter_description')
        ])

        @mediafile([
            'name' => 'seometa[twitter_image]',
            'label' => __('seo::meta.twitter_image'),
        ])
    </div>
</div>

@push('scripts')
    <script src="{{ asset('vendor/seo/admin/js/seo.js') }}"></script>
@endpush
