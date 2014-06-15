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
				'assets/css/style.css':        'assets/scss/app.scss',
				'assets/css/editor-style.css': 'assets/scss/editor-style.scss'
			}
		}
	},

	watch: {
	  grunt: { files: ['Gruntfile.js'] },

	  sass: {
		files: 'assets/scss/**/*.scss',
		tasks: ['sass']
	  }
	},

	copy: {
		// Copy the theme to a versioned release directory
			main: {
				src:  [
					'**',
					'!node_modules/**',
					'!bower_components/**',
					'!.git/**',
					'!.sass-cache/**',
					'!assets/scss/**',
					'!releases/**',
					'!Gruntfile.js',
					'!package.json',
					'!bower.json',
					'!.gitignore',
					'!.gitmodules',
					'!.bowerrc',
					'!README.md'
				],
				dest: 'releases/<%= pkg.version %>/files/'
			}
	},
	compress: {
		main: {
				options: {
					mode: 'zip',
					archive: './releases/<%= pkg.version %>/<%= pkg.name %>.zip'
				},
				expand: true,
				cwd: 'releases/<%= pkg.version %>/files/',
				src: ['**/*']
		}
	},
	bowercopy: {
		foundation: {
			options: {
            	destPrefix: 'assets',
				srcPrefix: 'bower_components'
        	},
			files: {
				'js/foundation': 'foundation/js/foundation',
				'js/foundation.min.js': 'foundation/js/foundation.min.js',
				'js/modernizr.js': 'modernizr/modernizr.js',
				'scss/_settings.scss': 'foundation/scss/foundation/_settings.scss'
			}
		}
	}

});
    grunt.loadNpmTasks('grunt-bowercopy');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-compress');

	grunt.registerTask('setup', ['bowercopy','sass','watch']);
	grunt.registerTask('default', ['sass','watch']);
	grunt.registerTask('build', ['sass', 'copy', 'compress']);
}