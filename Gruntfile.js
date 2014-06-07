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
				'css/style.css':    'sass/app.scss',
				'editor-style.css': 'sass/editor-style.scss'
			}
		}
	},

	watch: {
	  grunt: { files: ['Gruntfile.js'] },

	  sass: {
		files: 'sass/**/*.scss',
		tasks: ['sass']
	  }
	},

	compress: {
		options: {
			mode: 'zip',
			archive: "flair-theme.zip"
		},
		files: {
			expand: true,
			src: [
				'**',
				'!flair-theme.zip',
				'!bower_components/**',
				'!node_modules/**'
			],
		}
	}

});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compress');

	grunt.registerTask('build', ['sass']);
	grunt.registerTask('default', ['build','watch']);
	grunt.registerTask('archive', ['compress']);
}