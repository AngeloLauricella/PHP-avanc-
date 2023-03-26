<form  action="thanks.php"  method="post">

    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>

    <div>
      <label  for="prenom">prenom :</label>
      <input  type="text"  id="prenom"  name="user_prenom">
    </div>

    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>

    <div>
      <label  for="phone">Tel :</label>
        <input  type="tel"  id="phone"  name="user_phone">
    </div>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>

<div>
    <label for="jeu">choisis un jeu :</label>
  <select id="jeu" name="jeu">
    <option value="zelda">zelda</option>
    <option value="mario">mario</option>
    <option value="dark souls">dark souls</option>
    <option value="aladin">aladin</option>
  </select>
</div>

    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>

  </form>
