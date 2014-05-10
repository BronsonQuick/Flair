module.exports = function(grunt) {
	grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),

	sass: {
		options: {
			includePaths: ['bower_components/foundation/scss']
		},
		dist: {
			options: {
				outputStyle: 'compressed'
			},
			files: {
				'assets/css/style.css':    'assets/scss/app.scss',
				'editor-style.css': 'assets/scss/editor-style.scss'
			}
		}
	},

	watch: {
	  grunt: { files: ['Gruntfile.js'] },

	  sass: {
		files: 'assets/scss/**/*.scss',
		tasks: ['sass']
	  }
	}
	});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('build', ['sass']);
	grunt.registerTask('default', ['build','watch']);
}