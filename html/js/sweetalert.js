$("#btn1").click(function(){
  Swal.fire(
    'The Internet?',
    'That thing is still around?',
    'question'
  )
});

Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Something went wrong!'
  })