        <script>
          $(".vote-btn").on("click", function() {
            let id = $(this).data('id');
            let table = 'sub_vote'
            $.post("./api/vote.php", {
              id,
              table
            }, () => {
              // location.href = './api/vote.php';
              console.log(id)
              console.log(table)
            })
          })
        </script>