@props([
    'rating' => 0,
    'idReview' => 0
])
<div class="rating rating-sm pl-2 pb-2">
    <input type="radio" name="rating-2_{{ $idReview }}" id="star_{{ $idReview + 1 }}" class="mask mask-star-2 bg-[#FFED4E]" @checked($rating == 1) disabled/>
    <input type="radio" name="rating-2_{{ $idReview }}" id="star_{{ $idReview + 1 }}" class="mask mask-star-2 bg-[#FFED4E]" @checked($rating == 2) disabled/>
    <input type="radio" name="rating-2_{{ $idReview }}" id="star_{{ $idReview + 1 }}" class="mask mask-star-2 bg-[#FFED4E]" @checked($rating == 3) disabled/>
    <input type="radio" name="rating-2_{{ $idReview }}" id="star_{{ $idReview + 1 }}" class="mask mask-star-2 bg-[#FFED4E]" @checked($rating == 4) disabled/>
    <input type="radio" name="rating-2_{{ $idReview }}" id="star_{{ $idReview + 1 }}" class="mask mask-star-2 bg-[#FFED4E]" @checked($rating == 5) disabled/>
</div>
