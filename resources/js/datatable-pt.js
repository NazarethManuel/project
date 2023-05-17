import { DataTable } from 'simple-datatables';

document.addEventListener('DOMContentLoaded', () => {
  const table = new DataTable('datatablesSimple', {

    language: {
      processing: 'Processando...',
      search: 'Buscar:',
      lengthMenu: 'Mostrar _MENU_ registros',
      info: 'Mostrando _START_ a _END_ de _TOTAL_ registros',
      infoEmpty: 'Mostrando 0 a 0 de 0 registros',
      infoFiltered: '(filtrado de _MAX_ registros no total)',
      infoPostFix: '',
      loadingRecords: 'Carregando...',
      zeroRecords: 'Nenhum registro encontrado',
      emptyTable: 'Nenhum registro disponível na tabela',
      paginate: {
        first: 'Primeiro',
        previous: 'Anterior',
        next: 'Próximo',
        last: 'Último'
      },
      aria: {
        sortAscending: ': ative para ordenar a coluna em ordem crescente',
        sortDescending: ': ative para ordenar a coluna em ordem decrescente'
      }
    }
  });
});
