<style>
:root {
  --brown-dark: #3b241f;
  --brown-medium: #6f4e37;
  --brown-light: #EFE9E3;
  --cream: #fff7ef;
  --gold: #c89b3c;
}

.coffee-rating * {
  box-sizing: border-box;
  font-family: "Segoe UI", sans-serif;
  color: var(--brown-dark);
}

.coffee-rating {

  margin: auto;
}

.coffee-rating h2 {
  margin-bottom: 20px;
}

.coffee-card {
  background: var(--cream);
  border-radius: 14px;
  padding: 30px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.12);
 
}
.coffee-row {
  display: flex;
  gap: 32px;
  flex-wrap: wrap;
}

.coffee-left {
  flex: 1;
  min-width: 220px;
  text-align: center;
}

.coffee-right {
  flex: 2;
  min-width: 300px;
}


.coffee-score {
  font-size: 56px;
  font-weight: bold;
}

.coffee-stars {
  font-size: 22px;
  color: var(--gold);
}

.coffee-muted {
  font-size: 14px;
  color: var(--brown-medium);
}


.coffee-rating-bar {
  margin-bottom: 14px;
}

.coffee-bar-header {
  display: flex;
  justify-content: space-between;
  font-size: 14px;
  margin-bottom: 6px;
}

.coffee-progress {
  background: var(--brown-light);
  height: 10px;
  border-radius: 6px;
  overflow: hidden;
}

.coffee-progress span {
  display: block;
  height: 100%;
  background: linear-gradient(90deg, #b8862b, var(--gold));
}


.coffee-review {
  margin-top: 40px;
  border-top: 1px solid var(--brown-light);
  padding-top: 30px;
}

.coffee-review h3 {
  margin-bottom: 14px;
}


.coffee-star-rating {
  display: flex;
  gap: 6px;
  font-size: 26px;
  margin-bottom: 14px;
}

.coffee-star-rating input {
  display: none;
}

.coffee-star-rating label {
  cursor: pointer;
  color: #ccb9a5;
}

.coffee-review textarea {
  width: 100%;
  border-radius: 10px;
  padding: 12px;
  border: 1px solid var(--brown-light);
  resize: vertical;
  background: #fffdfb;
  font-size: 14px;
}

.coffee-review button {
  margin-top: 16px;
  padding: 12px 22px;
  background: var(--brown-medium);
  border: none;
  border-radius: 8px;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
}

.coffee-review button:hover {
  background: var(--brown-dark);
}
</style>

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

      <!-- Bars -->
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

    <!-- Review form -->
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
  </div>
</div>
