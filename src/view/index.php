<h1>情報を入力してください</h1>
<form action="./" method="post">
  <section>
    <h2>
      お名前を入力してください（必須）
    </h2>
    <p>
      <input type="text" name="familyname" value="<?= $value['familyname'] ?>">
      <input type="text" name="firstname" value="<?= $value['firstname'] ?>">
    </p>
    <?= $error['name'] ?>
  </section>
  <section>
    <h2>
      性別を選択してください（必須）
    </h2>
    <p>
      <label>
        <input type="radio" name="gender" value="1" <?= $value['gender1'] ?>>
        男性
      </label>
      <label>
        <input type="radio" name="gender" value="2" <?= $value['gender2'] ?>>
        女性
      </label>
    </p>
    <?= $error['gender'] ?>
  </section>
  <section>
    <h2>
      現在地を選択してください。
    </h2>
    <p>
      <select name="location">
        <option value="1" <?= $value['location1'] ?>>地球</option>
        <option value="2" <?= $value['location2'] ?>>月</option>
        <option value="3" <?= $value['location3'] ?>>太陽</option>
      </select>
    </p>
  </section>
  <section>
    <h2>
      該当するものにチェックをつけてください
    </h2>
    <p>
      <label>
        <input type="checkbox" name="mood1" value="1" <?= $value['mood1'] ?>>
        眠い
      </label>
      <label>
        <input type="checkbox" name="mood2" value="1" <?= $value['mood2'] ?>>
        お腹空いた
      </label>
      <label>
        <input type="checkbox" name="mood3" value="1" <?= $value['mood3'] ?>>
        疲れた
      </label>
    </p>
  </section>
  <section>
    <h2>
      要望があれば入力してください
    </h2>
    <p>
      <textarea name="request"><?= $value['request'] ?></textarea>
    </p>
  </section>
  <input type="submit">
  <input type="hidden" name="page" value="<?= $next_page ?>">
</form>
