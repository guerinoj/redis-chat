<div id="messages" class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
  <div class="chat-message">
    <div class="flex items-end">
      <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
        <div><span class="px-4 py-2 rounded-lg inline-block bg-gray-300 text-gray-600">Command was run with root privileges. I'm sure about that.</span></div>
        <div><span class="px-4 py-2 rounded-lg inline-block bg-gray-300 text-gray-600">I've update the description so it's more obviously now</span></div>
        <div><span class="px-4 py-2 rounded-lg inline-block bg-gray-300 text-gray-600">FYI https://askubuntu.com/a/700266/510172</span></div>
        <div>
          <span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">
            Check the line above (it ends with a # so, I'm running it as root )
            <pre># npm install -g @vue/devtools</pre>
          </span>
        </div>
      </div>
      <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144" alt="My profile" class="w-6 h-6 rounded-full order-1">
    </div>
  </div>

  <?php displayMessages() ?>

</div>