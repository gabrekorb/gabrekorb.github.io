let contador = 0;

function adicionarAvaliacao() {
  const container = document.getElementById("avaliacoes");
  const div = document.createElement("div");
  div.className = "avaliacao";
  div.innerHTML = `
    <input name="tipo${contador}" placeholder="Tipo (Prova)" required>
    <input name="nota${contador}" type="number" placeholder="Nota" step="0.1" required>
    <input name="peso${contador}" type="number" placeholder="Peso (%)" required>
  `;
  container.appendChild(div);
  contador++;
}

document.getElementById("notaForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(this);
  const params = new URLSearchParams();

  for (let [key, value] of formData.entries()) {
    params.append(key, value);
  }

  fetch("/calcular.c", {
    method: "POST",
    body: params,
  })
    .then((res) => res.text())
    .then((html) => {
      document.getElementById("resultado").innerHTML = html;
    })
    .catch((err) => {
      document.getElementById("resultado").innerText = "Erro ao calcular.";
    });
});
adicionarAvaliacao();
