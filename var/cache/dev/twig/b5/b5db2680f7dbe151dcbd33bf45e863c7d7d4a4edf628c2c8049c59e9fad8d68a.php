<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a7e308968b52d2ddba10ce4617fb8533d31216ec47b7ae3b7ae1a61c1853bd91 extends Twig_Template
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
        $__internal_31e9fe1e4d2fb2fc6d7a079ec1d5c91a633e9af89fc2dcf4eb23135b34026920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e9fe1e4d2fb2fc6d7a079ec1d5c91a633e9af89fc2dcf4eb23135b34026920->enter($__internal_31e9fe1e4d2fb2fc6d7a079ec1d5c91a633e9af89fc2dcf4eb23135b34026920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9a857bdc04e0377a6e13dde23cbd49624c5692f22df34e43d89bc2e75a8144fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a857bdc04e0377a6e13dde23cbd49624c5692f22df34e43d89bc2e75a8144fd->enter($__internal_9a857bdc04e0377a6e13dde23cbd49624c5692f22df34e43d89bc2e75a8144fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_31e9fe1e4d2fb2fc6d7a079ec1d5c91a633e9af89fc2dcf4eb23135b34026920->leave($__internal_31e9fe1e4d2fb2fc6d7a079ec1d5c91a633e9af89fc2dcf4eb23135b34026920_prof);

        
        $__internal_9a857bdc04e0377a6e13dde23cbd49624c5692f22df34e43d89bc2e75a8144fd->leave($__internal_9a857bdc04e0377a6e13dde23cbd49624c5692f22df34e43d89bc2e75a8144fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
