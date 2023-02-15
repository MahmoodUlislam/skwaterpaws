(function (api) {

	// Extends our custom "Blog Starter" section.
	api.sectionConstructor['rs-pet-blog'] = api.Section.extend({

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	});
	// jQuery("#accordion-panel-rs-pet-blog-theme-options").addClass("custom-class");

})(wp.customize);