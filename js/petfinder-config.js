(function (window, document, undefined) {

  'use strict';

  // Templates
  var allPets =
    '<article class="{{classes}} profile pet-profile card text-center" id="pet-{{id}}">'
    // + '<figure class="entry-thumbnail">'
      + '<img src="{{photo.1.medium}}" class="attachment-blog-masonry-thumb card-img-top img-fluid">'
    // + '</figure>'
    + '<div class="pl_content card-block">'
      + '<h3 class="entry-title card-title"><a href="{{url.pet}}">{{name}}</a></h3>'
      + '<div class="pl_subtitle card-text">'
        + '<strong>{{animal}}</strong> - {{age}}, {{gender}}, {{size}}'
      + '</div>'
      + ( typeof description !== 'undefined' ? '<div class="entry-content card-text">{{description}}</div>' : '' )
      + '<div class="actions"><a href="{{url.pet}}" class="button btn btn-primary" title="View pet profile">Profile</a></div>'
    + '</div>'
  + '</article>';

  var onePet =
    '<div class="pet-profile">'
      + '<div class="actions"><a href="{{url.all}}" class="button btn btn-secondary" title="View full list">&larr; Back to List</a></div>'
      + '<article class="{{classes}}" id="pet-{{id}}">'
        + '<header class="entry-header">'
          + '<h1 class="pet-title entry-title">{{name}}</h1>'
        + '</header>'
        + '<div class="gallery">'
          + '<a target="_blank" href="{{photo.1.large}}"><img class="img-thumbnail" src="{{photo.1.medium}}"></a>'
          + '<a target="_blank" href="{{photo.1.large}}"><img class="img-thumbnail" src="{{photo.2.medium}}"></a>'
          + '<a target="_blank" href="{{photo.1.large}}"><img class="img-thumbnail" src="{{photo.3.medium}}"></a>'
        + '</div>'
        + '<div class="entry-content">'
          + '<div class="pl_subtitle">'
            + '<strong>{{animal}}</strong> - {{age}}, {{gender}}, {{size}}'
          + '</div>'
          + '<div>{{options.multi}}</div>'
          + ( typeof description !== 'undefined' ? '<div class="entry-content">{{description}}</div>' : '' )
        + '<div class="actions"><a href="/adoption-application/" class="button btn btn-primary">Adoption Application</a></div>'
        + '<div class="actions"><a href="{{url.petfinder}}" class="button btn btn-secondary" target="_blank">View All Animals on Petfinder</a></div>'
      + '</article>'
    + '</div>'

  var asideAllPets =
  '<h4 class="widget-title">Filter By Type</h4>' +
  '{{checkbox.animals.toggle}}';

  petfinderAPI.init({
    key: petfinder_vars.key, // Learn more: https://www.petfinder.com/developers/api-key
    shelter: petfinder_vars.shelter,
    templates: {
      allPets: allPets,
      onePet: onePet,
      asideAllPets: asideAllPets,
    },
    callback: function () {
      petfinderSort.init(); // If you want to use the filtering plugin
    }
  });

})(window, document);
