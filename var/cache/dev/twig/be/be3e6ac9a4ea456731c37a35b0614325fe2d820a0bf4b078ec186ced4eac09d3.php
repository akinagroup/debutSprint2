<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5c3aaf774839e9ee6b85d40e3a14d65950e27928f0bbd52bb03b5f829d301ecd extends Twig_Template
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
        $__internal_ae4a8e673e3ffbbca14232f00d91b11e54104d9bee14e9fe8e222e4267a69662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4a8e673e3ffbbca14232f00d91b11e54104d9bee14e9fe8e222e4267a69662->enter($__internal_ae4a8e673e3ffbbca14232f00d91b11e54104d9bee14e9fe8e222e4267a69662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_816d5b720ca313dd7c21c45df0055f0bd7a09727dc6b57df99036a944df29c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816d5b720ca313dd7c21c45df0055f0bd7a09727dc6b57df99036a944df29c63->enter($__internal_816d5b720ca313dd7c21c45df0055f0bd7a09727dc6b57df99036a944df29c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ae4a8e673e3ffbbca14232f00d91b11e54104d9bee14e9fe8e222e4267a69662->leave($__internal_ae4a8e673e3ffbbca14232f00d91b11e54104d9bee14e9fe8e222e4267a69662_prof);

        
        $__internal_816d5b720ca313dd7c21c45df0055f0bd7a09727dc6b57df99036a944df29c63->leave($__internal_816d5b720ca313dd7c21c45df0055f0bd7a09727dc6b57df99036a944df29c63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
