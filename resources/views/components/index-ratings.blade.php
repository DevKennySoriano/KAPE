<link rel="stylesheet" href="{{ asset('css/ratings.css') }}">
<div class="coffee-rating">

  <div class="coffee-card">
    <div class="coffee-row">

      <div class="coffee-left">
        <div class="coffee-score">{{ $score ?? '4.8' }}</div>
        <div class="coffee-stars">★★★★☆</div>
        <p class="coffee-muted">
          Based on {{ $reviews ?? '245' }} reviews
        </p>
      </div>
      <div class="coffee-right">
        @foreach ($bars ?? [
          ['label' => '5 stars', 'value' => 70],
          ['label' => '4 stars', 'value' => 20],
          ['label' => '3 stars', 'value' => 5],
          ['label' => '2 stars', 'value' => 3],
          ['label' => '1 star', 'value' => 2],
        ] as $bar)
          <div class="coffee-rating-bar">
            <div class="coffee-bar-header">
              <span>{{ $bar['label'] }}</span>
              <span>{{ $bar['value'] }}%</span>
            </div>
            <div class="coffee-progress">
              <span style="width: {{ $bar['value'] }}%"></span>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="coffee-review">
      <h3>Write a Review</h3>

      <div class="coffee-star-rating">
        @for ($i = 5; $i >= 1; $i--)
          <input type="radio" name="rating" id="rating-{{ $i }}">
          <label for="rating-{{ $i }}">★</label>
        @endfor
      </div>
      <textarea rows="3" placeholder="Tell us about your coffee experience..."></textarea>
      <button type="button">Submit Review</button>
    </div>
  <div class="coffee-static-reviews">
    <h3>Customer Reviews</h3>
      <div class="coffee-total-reviews">
    <strong>Total Reviews:</strong> 3
  </div>
  <div class="coffee-review-item">
    <div class="coffee-review-header">
      <strong>Ken S.</strong>
      <span class="coffee-review-stars">★★★★★</span>
    </div>
     <span class = "reviewdate" style="color: #888; font-size: 12px;"> July 15, 2000 </span>
    <p class="coffee-review-text">
    MASARAP SIYA PAREEEH!!! I LOVE MATCHA LATTE.
    </p>
  </div>

  <div class="coffee-review-item">
    <div class="coffee-review-header">
      <strong>Mark A.</strong>
      <span class="coffee-review-stars">★★★☆</span>
    </div>
    <span class = "reviewdate" style="color: #888; font-size: 12px;"> Feb 15, 1981 </span>
    <p class="coffee-review-text">
      BABALIK BALIKAN KO DITO PRE. SAKTO LANG ANG TAMIS AT HINDI MATAPANG.
    </p>
  </div>

  <div class="coffee-review-item">
    <div class="coffee-review-header">
      <strong>Zachary A.</strong>
      
      <span class="coffee-review-stars">★★★★★</span>
    </div>
    <span class = "reviewdate" style="color: #888; font-size: 12px;"> Dec 15, 1821 </span>
    <p class="coffee-review-text">
      BAHALA NA TALAGA ANG TAONG NASA LIKOD NG KAPE NA TO. SUPER SARAP!
    </p>
  </div>
</div>

  </div>
</div>
