<?php require('../includes/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>
<style type="text/css">
	tr.odd_row {
		background-color: #f6f6f6;
	}

	tr.even_row {
		background-color: #ffcccc;
	}

	tr.header_row {
		background-color: #780000;
		color: #ffffff;
	}

	table.simple_table td, table.simple_table th {
		padding: 5px;
	}

	table.simple_table {
		border-collapse: collapse;
		border-spacing: 0;
	}
</style>

<div id="instructions">
	<h1>Displaying a simple table with QSimpleTable</h1>

	<p>The <strong>QSimpleTable</strong> control is similar to <strong>QDataGrid</strong> in that it allows to present a collection of objects
		or data in a grid-based
		(&lt;table&gt;) format. The data binding for QSimpleTable is done the same way as for QDataGrid - by simply setting
		its <strong>DataSource</strong> property.</p>

	<p>Since QSimpleTable extends QPaginatedControl, all the pagination related feature are also present in this control.</p>

	<p>Also, similar to QDataGrid, you must define a new column object for each column in your table.
		And this is where the differences with QDataGrid begin. While QDataGrid uses a string with php code in special tags
		to specify how the values for each cell have to be fetched from the DataSource object rows, QSimpleTable uses user
		specified functions (or <a href="http://php.net/manual/en/functions.anonymous.php">PHP 5.3 Closures</a>). This means that
		unlike QDataGrid, QSimpleTable <strong>does not</strong> use the PHP eval() function to calculate the cell values.
		PHP's eval(), while a very powerful tool, has many drawbacks such as potential security risks and difficulties it
		creates for optimizing compilers.</p>

	<p>The column objects for QSimpleTable must be of type <strong>QAbstractSimpleTableColumn</strong>. There are three such built in
		classes:</p>

	<ul>
		<li><strong>QSimpleTablePropertyColumn</strong>: this is useful when the cell data can be fetched by simply calling a
			property on the items in the DataSource array.</li>
		<li><strong>QSimpleTableIndexedColumn</strong>: this is useful when the DataSource items are arrays and the cell
			values are the elements of those arrays.</li>
		<li><strong>QSimpleTableClosureColumn</strong>: this is the most powerful of the tree and is useful when fetching the cell
			data requires complex application logic.</li>
	</ul>

	<p>These columns can be created and added to the table using the QSimpleTable::CreatePropertyColumn(),
		QSimpleTable::CreateIndexedColumn() and QSimpleTable::CreateClosureColumn() methods respectively. Of course they can also be
		constructed directly, and added using QSimpleTable::AddColumn methods.</p>

	<p>Note, that as the name indicates, QSimpleTable is very simple, it does not provide several of the features that are
		built into QDataGrid, such as sorting, filtering, row actions, etc.</p>

	<p>The main reason for QSimpleTable is to serve as a base class for fully featured JavaScript datagrid controls such
		as the <a href="http://www.trirand.com/blog/">jqGrid</a> and <a href="http://datatables.net/">DataTables</a> jQuery
		plugins. QSimpleTableColumn has a simple method called FetchCellValue(), that returns the
		cell value, without any html rendering. This method makes it very easy to generate the table data in any format
		necessary for the javascript control (e.g. json, xml, etc).</p>

	<h2>First Example</h2>

	<p>The first example demonstrates how to use property and closure based columns when the DataSource is an array of objects.</p>

	<p>The first column is using a Closure (for PHP 5.3 and later) or a user defined function (for PHP 5.2 and earlier), to
		compute the value of the cells.</p>

	<p>The second column uses the "LastName" property to get the value of the cells.</p>

	<h2>Second Example</h2>

	<p>The second example demonstrates how to use the indexed columns when the DataSource is an array of arrays. This is
		typically necessary in complex reports, when the data comes from external sources or cannot be easily generated with
		a simple QQuery.</p>

	<p>The first 4 columns will use an indexed access to the DataSource arrays.</p>

	<p>The last column will use "#count" as the key into the array.</p>

	<p>Of course in a real world case, these two types of columns will not be mixed - one would either use a simple
		indexed array, or a fully associative array.</p>
</div>

<div id="demoZone">
	<h2>Example One</h2>
	<div style="margin-left: 100px">
		<?php $this->tblPersons->Render(); ?>
	</div>
</div>

<div id="demoZone">
	<h2>Example Two</h2>
	<div style="margin-left: 100px">
		<?php $this->tblReport->Render(); ?>
	</div>
<div>

<?php $this->RenderEnd(); ?>
<?php require('../includes/footer.inc.php'); ?>