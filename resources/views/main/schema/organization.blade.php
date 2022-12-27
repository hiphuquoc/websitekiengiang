<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "https://hitour.vn",
        "logo": "{{ config('info.logo') }}",
        "image": "{{ config('info.image') }}",
        "description": "{{ config('info.description') }}",
        "founder": "{{ config('info.founder') }}",
        "address": "{{ config('info.address_founder') }}",
        "contactPoint":
            [
                {
                    "@type": "ContactPoint",
                    "telephone": "(+84 8) 6868 4868",
                    "email": "mailto:hiphuquoc@gmail.com",
                    "contactPoint": [
                        @foreach(config('info.contacts') as $contact)
                            @if($loop->index!=0) 
                                ,
                            @endif
                            {
                                "@type": "ContactPoint",
                                "telephone": "{{ $contact['phone'] }}",
                                "contactType": "{{ $contact['type'] }}"
                            }
                        @endforeach
                    ]
                    "productSupported": [
                        @foreach(config('info.products') as $product)
                            @if($loop->index!=0) 
                                ,
                            @endif
                            {
                                "@type": "{{ $product['type'] }}",
                                "name": "{{ $product['product'] }}"
                            }
                        @endforeach
                    ]
                }
            ],
        "sameAs": 
            [
                @foreach(config('info.socials') as $social)
                    @if($loop->index!=0) 
                        ,
                    @endif
                    {{ $social }}
                @endforeach
            ]
    }
</script>
