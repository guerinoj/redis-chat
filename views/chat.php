<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="flex-1 p:2 sm:p-6 justify-between flex flex-col h-screen">
    <h1 class="text-3xl text-center font-bold underline">
      The Amazing Redis Chat
    </h1>



    <?php include 'components/header.php'; ?>
    <?php include 'components/messages.php'; ?>
    <?php include 'components/footer.php'; ?>



  </div>

  <style>
    .scrollbar-w-2::-webkit-scrollbar {
      width: 0.25rem;
      height: 0.25rem;
    }

    .scrollbar-track-blue-lighter::-webkit-scrollbar-track {
      --bg-opacity: 1;
      background-color: #f7fafc;
      background-color: rgba(247, 250, 252, var(--bg-opacity));
    }

    .scrollbar-thumb-blue::-webkit-scrollbar-thumb {
      --bg-opacity: 1;
      background-color: #edf2f7;
      background-color: rgba(237, 242, 247, var(--bg-opacity));
    }

    .scrollbar-thumb-rounded::-webkit-scrollbar-thumb {
      border-radius: 0.25rem;
    }
  </style>

  <script>
    const el = document.getElementById('messages')
    el.scrollTop = el.scrollHeight


    //Gestion de l'envoi du message
    document.getElementById('send').addEventListener('click', () => {
      message = document.getElementById('message').value
      if (message) {
        formData = new FormData()
        formData.append("message", message)

        fetch("processing.php", {
            method: "POST",
            body: formData
          })
          .then(function(response) {
            if (!response.ok) {
              throw new Error("La requête a échoué : " + response.status);
            }
          })
          .catch(function(error) {
            console.error("Erreur : " + error);
          });

        document.getElementById('message').value = ""

        // Recharger la page après 1 seconde
        setTimeout(function() {
            location.reload();
        }, 500);
      }
    })
  </script>
</body>

</html>