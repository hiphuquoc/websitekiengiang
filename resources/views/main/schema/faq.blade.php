@php
    use \App\Helpers\Words;
@endphp
@if(!empty($data)&&$data->isNotEmpty())
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                @foreach($data as $faq)
                    @if($loop->index!=0) 
                        ,
                    @endif
                    {
                        "@type": "Question",
                        "name": "{{ Words::convertLocal($faq->question) }}",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "{{ Words::convertLocal($faq->answer) }}"
                        }
                    }
                @endforeach
            ]
        }
    </script>
@endif