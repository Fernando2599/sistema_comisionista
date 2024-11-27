import './bootstrap';
import { showDeleteAlert } from './confirmdeletion';  // Importa la función de confirmDeletion

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.eliminar-rol').forEach(form => {
        showDeleteAlert(form);  // Llamada a la función con el selector
    });
});