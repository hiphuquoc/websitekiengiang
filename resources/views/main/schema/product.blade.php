<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "{{ $data->seo_title ?? $data->title ?? null }}",
        "url": "{{ URL::current() }}",
        "image":
            [
                {!! !empty($data->image) ? '"'.env('APP_URL').$data->image.'"' : null !!}
            ],
        "description": "{{ $data->seo_description ?? $data->description ?? null }}",
        "sku": "WW122023M{{ !empty($data->created_at) ? strtotime($data->created_at) : 00 }}YK/VN",
        "brand": {
            "@type": "Brand",
            "name": "{{ $data->rating_author_name ?? null }}"
        },
        "review":
            {
                "@type": "Review",
                "reviewRating":
                    {
                        "@type": "Rating",
                        "ratingValue": "5"
                    },
                "author": {
                    "@type": "Thing",
                    "name": "{{ $data->rating_author_name ?? null }}"
                }
            },
        "aggregateRating":
            {
                "@type": "AggregateRating",
                "ratingValue": "{{ $data->rating_aggregate_star ?? '4.4' }}",
                "reviewCount": "{{ $data->rating_aggregate_count ?? '172' }}",
                "bestRating": "5"
            },
        "offers":
            {
                "@type": "AggregateOffer",
                "url": "{{ URL::current() }}",
                "offerCount": "1",
                "priceCurrency": "VND",
                "lowPrice": "{{ $lowPrice ?? '500000' }}",
                "highPrice": "{{ $highPrice ?? '5000000' }}",
                "itemCondition": "https://schema.org/UsedCondition",
                "availability": "https://schema.org/InStock",
                "seller":
                    {
                        "@type": "Organization",
                        "name": "{{ $data->rating_author_name ?? null }}",
                        "url": "{{ env('APP_URL') }}"
                    }
            }
    }
</script>
