

  <script>
    (() => {

        // Variables
        const headers = {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }

        // Delete
        const deleteElement = async e => {
            e.preventDefault();
            Swal.fire({
              title: e.target.dataset.name,
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#DD6B55',
              confirmButtonText: '@lang('Yes')',
              cancelButtonText: '@lang('No')',
              preConfirm: () => {
                  return fetch(e.target.getAttribute('href'), {
                      method: 'DELETE',
                      headers: headers
                  })
                  .then(response => {
                      if (response.ok) {
                          e.target.parentNode.parentNode.remove();
                      } else {
                        Swal.fire({
                            icon: 'error',
                            title: '@lang('Whoops!')',
                            text: '@lang('Something went wrong!')'
                        });
                      }
                  });
              }
            });
        }

        // Listener wrapper
        const wrapper = (selector, type, callback, condition = 'true', capture = false) => {
            const element = document.querySelector(selector);
            if(element) {
                document.querySelector(selector).addEventListener(type, e => {
                    if(eval(condition)) {
                        callback(e);
                    }
                }, capture);
            }
        };

        // Set listeners
        window.addEventListener('DOMContentLoaded', () => {
            wrapper('table', 'click', deleteElement, "e.target.matches('.btn-danger')");
        });

    })()

  </script>

@endsection
