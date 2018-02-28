<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_92fa9502b55dd04a7a5cfbcb234eb3b045d59506bb784d002e9e090a133ab876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2a8c7f0541c0ac89ea33a10224e8daedb1f1d04fb15fd5064a562b1d7d497bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a8c7f0541c0ac89ea33a10224e8daedb1f1d04fb15fd5064a562b1d7d497bd->enter($__internal_e2a8c7f0541c0ac89ea33a10224e8daedb1f1d04fb15fd5064a562b1d7d497bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_abe04c8726812471b0831495dd289b98fa7d834d825a95ed17f389cf40e3d973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe04c8726812471b0831495dd289b98fa7d834d825a95ed17f389cf40e3d973->enter($__internal_abe04c8726812471b0831495dd289b98fa7d834d825a95ed17f389cf40e3d973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e2a8c7f0541c0ac89ea33a10224e8daedb1f1d04fb15fd5064a562b1d7d497bd->leave($__internal_e2a8c7f0541c0ac89ea33a10224e8daedb1f1d04fb15fd5064a562b1d7d497bd_prof);

        
        $__internal_abe04c8726812471b0831495dd289b98fa7d834d825a95ed17f389cf40e3d973->leave($__internal_abe04c8726812471b0831495dd289b98fa7d834d825a95ed17f389cf40e3d973_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
