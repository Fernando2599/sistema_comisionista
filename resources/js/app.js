import './bootstrap';
import { showDeleteAlert } from './modules/confirmdeletion';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.confirmar-eliminacion').forEach(form => {
        showDeleteAlert(form);
    });
});