<div class="example">
	<pre>Function.prototype.inherits = function(parent)
{
    for (var key in parent.prototype)
    {
        this.prototype[key] = parent.prototype[key];
    }
};</pre>
</div>

