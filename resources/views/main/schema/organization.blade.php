<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "{{ config('info.company_name_en') }}",
        "description": "{{ config('info.description') }}",
        "founder": "{{ config('info.founder') }}",
        "foundingDate": "{{ date('c', strtotime('2022-12-28')) }}",
        "address": "{{ config('info.address_founder') }}",
        "url": "http://www.acmeinc.com",
        "logo": "{{ config('info.logo') }}",
        "contactPoint": [
            @foreach(config('info.contacts') as $contact)
                @if($loop->index!=0) 
                    ,
                @endif
                {
                    "@type": "ContactPoint",
                    "telephone": "{{ $contact['phone'] }}",
                    "contactType": "{{ $contact['type'] }}",
                    "areaServed": ["VN"],
                    "availableLanguage": ["Vietnamese"]
                }
            @endforeach
        ],

        {{-- "productSupported": [{
            "@type": "Product",
            "name": "Thiết Kế Website Chuyên Nghiệp",
            "description": "Dịch vụ thiết kế website chuyên nghiệp tại Kiên Giang, giúp doanh nghiệp tối ưu hóa hiệu quả kinh doanh trực tuyến và xây dựng thương hiệu 4.0 thành công.",
            "sku": "TKW-001",
            "brand": {
              "@type": "Brand",
              "name": "Thiết Kế Website Kiên Giang"
            }
        }], --}}

        "sameAs": [
            @foreach(config('info.socials') as $social)
                @if($loop->index!=0) 
                    ,
                @endif
                "{{ $social }}"
            @endforeach
        ]
      }
</script>
