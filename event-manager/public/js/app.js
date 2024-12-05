// Aguarda o DOM carregar completamente antes de executar os scripts
document.addEventListener("DOMContentLoaded", function () {
    console.log("App iniciado!");

    // Exemplo: Confirmação ao excluir um evento
    const deleteButtons = document.querySelectorAll(".btn-delete");
    deleteButtons.forEach(button => {
        button.addEventListener("click", function (event) {
            const confirmed = confirm("Tem certeza que deseja excluir este evento?");
            if (!confirmed) {
                event.preventDefault(); // Impede a ação padrão do botão
            }
        });
    });

    // Exemplo: Validação simples de formulário
    const eventForm = document.querySelector("#eventForm");
    if (eventForm) {
        eventForm.addEventListener("submit", function (event) {
            const title = document.querySelector("#eventTitle").value.trim();
            const date = document.querySelector("#eventDate").value.trim();

            if (title === "" || date === "") {
                alert("Por favor, preencha todos os campos obrigatórios.");
                event.preventDefault(); // Impede o envio do formulário
            }
        });
    }
});
