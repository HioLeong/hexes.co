module.exports = function (config) {
	'use strict';

	config.set({
		basePath: '../../',
		frameworks: ['jasmine'],
		files: [
			'js/angular.js',
			'js/angular-mocks.js',
            'js/jquery.min.js',
            'js/hexApp.js',
            'js/LoginCtrl.js',
			'js/*.js',
			'test/unit/**/*.js'
		],
		autoWatch: true,
		singleRun: true,
		browsers: ['Chrome', 'Firefox']
	});
};
