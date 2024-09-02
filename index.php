<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./style/style.css">
  <title>Document</title>
</head>
<body>
 <header>
  <div class="logo-model-area">
    <h1>The<span class="logo-span">Diary</span></h1>
  </div>
  <div class="title-functions-area">
    <h2>Contacts</h2>
    <div>
      <button class="add-button">Add</button>
      <button class="export-button">Export</button>
    </div>
  </div>
 </header>
 <main>
  <aside>
    <section class="">
      ...
    </section>
    <section>
      ...
    </section>
  </aside>
  <section class="contacts-area">
    <div class="contacts-area-functions">
      <button class="filter-status-button">Filter<i class="fa-solid fa-filter"></i></button>
      <button class="alphabetic-order-button">Sort<i class="fa-solid fa-sort"></i></button>
    </div>
    <div class="contacts-list">
      ...
    </div>
  </section>
 </main>
 <section class="modal disabled" id="modal">
  <div class="form-modal-border">
    <form class="form-modal-content">
        <div id="title-form-area">
          <h3>Add Contact</h3>
          <button type="reset" class="btn-close-modal"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div>
          <label for="Name">Nome</label>
          <input type="text" name="Name" id="Name">
        </div>
        <div>
          <label for="Phone">Telefone:</label>
          <input type="text" name="Phone" id="Phone">
        </div>
        <div>
          <label for="Enterprise">Empresa:</label>
          <input type="text" name="Enterprise" id="Enterprise">
        </div>
        <div>
          <label>Posição:</label>
          <div id="tags-container">
            <span class="tag tag-gerente" data-value="Gerente">Gerente</span>
            <span class="tag tag-vendedor" data-value="Vendedor">Vendedor</span>
            <span class="tag tag-assistente" data-value="Assistente">Assistente</span>
            <span class="tag tag-analista" data-value="Analista">Analista</span>
            <span class="tag tag-supervisor" data-value="Supervisor">Supervisor</span>
          </div>
        </div>
        <div>
          <label for="Email">Email:</label>
          <input type="text" name="Email" id="Email">
        </div>
        <button class="save-button" type="submit">Salvar</button>
    </form>
  </div>
 </section>
 <script src="./scripts/modal.js"></script>
 <script src="./scripts/formData.js"></script>
</body>
</html>