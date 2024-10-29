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
