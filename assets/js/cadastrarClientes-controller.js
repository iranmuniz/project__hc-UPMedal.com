import { clienteService } from '../js/cliente-service.js'

const formulario = document.querySelector('[data-form]')

formulario.addEventListener('submit', (evento) => {

    evento.preventDefault()

    const email = evento.target.querySelector('[data-email]').value

    clienteService.criaCliente(email)
    .then(() => {
        window.location.href = '../../index.html'
    })
})