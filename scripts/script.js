document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const form = this.closest('.delete-form'); 
            const id = form.dataset.id; 
            
            bootbox.confirm({
                message: 'Tem certeza que deseja excluir esta vaga?',
                buttons: {
                    confirm: {
                        label: 'Sim',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'Não',
                        className: 'btn-danger'
                    }
                },
                className: 'custom-modal',
                callback: function (result) {
                    if (result) {
                        form.submit(); 
                    }
                }
            });
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const viewButtons = document.querySelectorAll(".view-btn");

    viewButtons.forEach(button => {
        button.addEventListener("click", function () {
            const id = this.getAttribute("data-id");

            // Faz a requisição AJAX para buscar os dados da vaga
            fetch(`view_vaga.php?id=${id}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById("vagaDetails").innerHTML = data;
                })
                .catch(error => {
                    console.error("Erro ao carregar os dados da vaga:", error);
                    document.getElementById("vagaDetails").innerHTML = "<p>Erro ao carregar os dados.</p>";
                });
        });
    });
});