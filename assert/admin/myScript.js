 
jQuery(document).ready(function($){
    let search_form = $('#my-search-form');

    search_form.submit(function(event){
      event.preventDefault();
      let search_word = $('#my_search_word').val(); // Added '#' to the selector
      let formData = new FormData();
      formData.append('action','my_search_func');
      formData.append('search_word',search_word);


      $.ajax({
        url: ajaxUrl,
        type: 'post',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response){
          $('#my-table-results').html(response);
        },
        error: function(){
          console.log('error');
        }
      })

    });
});
