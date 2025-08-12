<form action="/dragonfight" method="POST">
@csrf
<h1>Dragonfight Quest</h1>
<p>Reward: 5💎 10XP </p>
<label for="weapon">Choose your weapon:</label>

<select name="weapon" id="weapon">
  <option value="sword">Beginner Sword</option>
  <option value="hammer">Beginner Hammer</option>
</select>

<button type="submit">Fight the Dragon</button>
</form>

<form action="/slimemonster" method="POST">
@csrf
<h1>Slimemonster Quest</h1>
<p>Reward: 1💎 🧪mystery Potion 5XP</p>
<button type="submit">Catch the Slimemonster</button>
</form>
