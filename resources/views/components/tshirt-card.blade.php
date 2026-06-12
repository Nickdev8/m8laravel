<article class="card">
    <img
        class="tshirt-image"
        src="{{ asset($tshirt->image_path) }}"
        alt="{{ $tshirt->text_line_1 }}"
    >

    <h2>{{ $tshirt->text_line_1 }}</h2>

    @if ($tshirt->text_line_2)
        <p>{{ $tshirt->text_line_2 }}</p>
    @endif

    <p>
        <span class="tag">{{ $tshirt->category->name }}</span>
        <span class="tag">{{ $tshirt->color->name }}</span>
    </p>

    <a class="button" href="{{ route('tshirts.show', $tshirt) }}">
        View details
    </a>
</article>
