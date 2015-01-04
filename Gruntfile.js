module.exports = function(grunt) {
	grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),

	sass: {
		options: {
			loadPath: ['bower_components/foundation/scss']
		},
		dist: {
			options: {
				style: 'compressed'
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
					'!README.md',
					'!codesniffer.ruleset.xml',
					'!.travis.yml'
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
		new: {
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
		},
		existing: {
			options: {
				destPrefix: 'assets',
				srcPrefix: 'bower_components'
			},
			files: {
				'js/foundation': 'foundation/js/foundation',
				'js/foundation.min.js': 'foundation/js/foundation.min.js',
				'js/modernizr.js': 'modernizr/modernizr.js'
			}
		}
	},
	imagemin: {
		build: {
			files: [{
				expand: true,
				cwd: './assets/images/',
				src: ['**/*.{png,jpg,gif}'],
				dest: './assets/images/'
			}],
				options: {
				optimizationLevel: 7
			}
		}
	}

});
	grunt.loadNpmTasks('grunt-bowercopy');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-compress');
	grunt.loadNpmTasks('grunt-contrib-imagemin');

	grunt.registerTask('setup', function(){
		if ( true == grunt.file.exists('assets/scss/_settings.scss') ) {
			grunt.task.run(['bowercopy:existing', 'sass']);
		} else {
			grunt.task.run(['bowercopy:new', 'sass']);
		}
	});
	grunt.registerTask('default', ['sass','watch']);
	grunt.registerTask('build', ['sass', 'copy', 'compress', 'imagemin']);
}