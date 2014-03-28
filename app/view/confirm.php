<h1>情報を確認してください</h1>
<section>
  <h2>
    お名前
  </h2>
  <p>
    <span><?= $display['familyname'] ?></span>
    <span><?= $display['firstname'] ?></span>
  </p>
</section>
<section>
  <h2>
    性別
  </h2>
  <p>
    <span><?= $display['gender'] ?></span>
  </p>
</section>
<section>
  <h2>
    現在地
  </h2>
  <p>
    <span><?= $display['location'] ?></span>
  </p>
</section>
<section>
  <h2>
    気分
  </h2>
  <p>
    <span><?= $display['mood1'] ?></span>
    <span><?= $display['mood2'] ?></span>
    <span><?= $display['mood3'] ?></span>
  </p>
</section>
<section>
  <h2>
    要望
  </h2>
  <p>
    <pre><?= $display['request'] ?></pre>
  </p>
</section>
<form action="./" method="post">
  <input type="submit">
  <input type="hidden" name="page" value="<?= $next_page ?>">
  <?= $response->hidden_data ?>
</form>
