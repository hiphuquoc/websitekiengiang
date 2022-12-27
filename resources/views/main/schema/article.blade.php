<script type="application/ld+json">
    @php
     
    @endphp
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "@id": "{{ URL::current() }}#website",
        "inLanguage": "vi",
        "headline": "{{ $data->rating_author_name ?? null }} Article",
        "datePublished": "{{ !empty($data->created_at) ? date('c', strtotime($data->created_at)) : null }}",
        "dateModified": "{{ !empty($data->updated_at) ? date('c', strtotime($data->updated_at)) : null }}",
        "name": "{{ $data->seo_title ?? $data->title ?? null }}",
        "description": "{{ $data->seo_description ?? $data->description ?? null }}",
        "url": "{{ URL::current() }}",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ URL::current() }}"
        },
        "author":{
            "@type": "Person",
            "name": "{{ $data->rating_author_name ?? null }}"
        },
        "image":{
            "@type": "ImageObject",
            "url": "{{ env('APP_URL') }}{{ $data->image ?? $data->image_small ?? null }}",
            "width": "750",
            "height": "460"
        },
        "publisher": {
            "@type": "Organization",
            "name": "{{ $data->rating_author_name ?? null }}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ config('info.logo') }}",
                "width": "500",
                "height": "500"
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