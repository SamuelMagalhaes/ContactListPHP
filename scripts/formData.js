const form = document.querySelector('.form-modal-content')
let selectedTag = null

const position = document.querySelectorAll('.tag')

  position.forEach(tag => {
    tag.addEventListener('click', (event) => {

      document.querySelectorAll('.tag').forEach(t => t.classList.remove('selected'))

      event.target.classList.add('selected')

      selectedTag = event.target.innerText
    })
  })

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const name = document.querySelector('#Name').value.trim()
  const phone = document.querySelector('#Phone').value.trim()
  const enterprise = document.querySelector('#Enterprise').value.trim()
  const position = selectedTag
  const email = document.querySelector('#Email').value.trim()

  const data = {
    name: name,
    phone: phone,
    enterprise: enterprise,
    position: position,
    email: email
  }

  console.log(data)
})