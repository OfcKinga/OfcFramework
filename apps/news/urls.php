<?php

return array(
	url('/news', render_url('main'), 'amain'),
	url('/news/read/{id}', 'read', 'aread')
);
