<script type="application/ld+json">
    @php
        use \App\Helpers\Words;

        /* title */
        $title          = null;
        if(!empty($data->title)) $title = Words::convertLocal($data->title);
        if(!empty($data->seo_title)) $title = Words::convertLocal($data->seo_title);

        /* description */
        $description    = null;
        if(!empty($data->description)) $description = Words::convertLocal($data->description);
        if(!empty($data->seo_description)) $description = Words::convertLocal($data->seo_description);

        /* author */
        $author         = null;
        if(!empty($data->rating_author_name)) $author = Words::convertLocal($data->rating_author_name);
    @endphp
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "@id": "{{ URL::current() }}#website",
        "inLanguage": "vi",
        "headline": "{{ $author }} Article",
        "datePublished": "{{ !empty($data->created_at) ? date('c', strtotime($data->created_at)) : null }}",
        "dateModified": "{{ !empty($data->updated_at) ? date('c', strtotime($data->updated_at)) : null }}",
        "name": "{{ $title }}",
        "description": "{{ $description }}",
        "url": "{{ URL::current() }}",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ URL::current() }}"
        },
        "author":{
            "@type": "Person",
            "name": "{{ $author }}"
        },
        "image":{
            "@type": "ImageObject",
            "url": "{{ env('APP_URL') }}{{ $data->image ?? $data->image_small ?? null }}",
            "width": "750",
            "height": "460"
        },
        "publisher": {
            "@type": "Organization",
            "name": "{{ $author }}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ config('info.logo') }}",
                "width": "750",
                "height": "460"
            }
        },
        "potentialAction": {
            "@type": "ReadAction",
            "target": [
                {
                    "@type": "EntryPoint",
                    "urlTemplate": "{{ URL::current() }}"
                }
            ]
        }
    }
</script>