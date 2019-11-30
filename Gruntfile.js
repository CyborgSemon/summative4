module.exports = function(grunt) {
	grunt.initConfig({
		cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'assets/css/',
                    src: ['*.css', '!*.min.css'],
                    dest: 'assets/css/',
                    ext: '.min.css'
                }]
            }
        },
        uglify: {
            my_target: {
                files: {
                    'assets/js/main.min.js': ['assets/js/main.js']
                }
            }
        },
		sass: {
			dist: {
				files: {
					'assets/css/main.css': 'assets/scss/main.scss'
				}
			}
		},
		watch: {
			sass: {
				files: ['assets/scss/main.scss'],
				tasks: ['sass', 'cssmin']
			},
			js: {
				files: ['assets/js/main.js'],
				tasks: ['uglify']
			},
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify-es');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['watch']);
	grunt.registerTask('run', ['sass', 'cssmin', 'uglify']);
};
