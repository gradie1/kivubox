$(document).ready(function(){$('.pname').click(function(){var a=$(this).next(); a.slideToggle();});$('#published').click(function(){$('#unpub').hide();$('#projects').show();});$('#grabbed').click(function(){$('#projects').hide();$('#unpub').show();});$('.profil-wrapper').click(function(){$('.set').show();});});