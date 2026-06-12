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
        <a class="tag" href="{{ route('categories.show', $tshirt->category) }}">
            {{ $tshirt->category->name }}
        </a>
        <a class="tag" href="{{ route('colors.show', $tshirt->color) }}">
            {{ $tshirt->color->name }}
        </a>
    </p>

    <a class="button" href="{{ route('tshirts.show', $tshirt) }}">
        View details
    </a>
</article>
